namespace SoundFingerprinting.Audio.NAudio.Test
{
    using System.IO;

    using Microsoft.VisualStudio.TestTools.UnitTesting;

    using Moq;
    using Moq.Protected;

    using global::NAudio.MediaFoundation;

    using global::NAudio.Wave;

    using SoundFingerprinting.Tests;

    [TestClass]
    public class NAudioSourceReaderTest : AbstractTest
    {
        private readonly Mock<INAudioFactory> naudioFactory = new Mock<INAudioFactory>(MockBehavior.Strict);
        private readonly Mock<ISamplesAggregator> samplesAggregator = new Mock<ISamplesAggregator>(MockBehavior.Strict);

        private NAudioSourceReader sourceReader;

        [TestInitialize]
        public void SetUp()
        {
            sourceReader = new NAudioSourceReader(samplesAggregator.Object, naudioFactory.Object);
        }

        [TestCleanup]
        public void TearDown()
        {
            samplesAggregator.VerifyAll();
            naudioFactory.VerifyAll();
        }

        [TestMethod]
        public void TestReadMonoSamplesFromFile()
        {
            Mock<WaveStream> waveStream = new Mock<WaveStream>(MockBehavior.Strict);
            naudioFactory.Setup(factory => factory.GetStream("path-to-audio-file")).Returns(waveStream.Object);
            const int Mono = 1;
            WaveFormat waveFormat = WaveFormat.CreateIeeeFloatWaveFormat(SampleRate, Mono);
            waveStream.Setup(stream => stream.WaveFormat).Returns(waveFormat);
            waveStream.Setup(stream => stream.Close());
            const int StartAt = 20;
            waveStream.Setup(stream => stream.Seek(SampleRate * waveFormat.BitsPerSample / 8 * StartAt, SeekOrigin.Begin))
                .Returns(440960);
            Mock<MediaFoundationTransform> resampler = new Mock<MediaFoundationTransform>(
                MockBehavior.Strict, new object[] { waveStream.Object, waveFormat });
            resampler.Protected().Setup("Dispose", new object[] { true });
            naudioFactory.Setup(factory => factory.GetResampler(waveStream.Object, SampleRate, Mono)).Returns(resampler.Object);
            float[] samplesArray = TestUtilities.GenerateRandomFloatArray(1024);
            const int SecondsToRead = 10;
            samplesAggregator.Setup(
                agg => agg.ReadSamplesFromSource(It.IsAny<NAudioSamplesProviderAdapter>(), SecondsToRead, SampleRate)).Returns(
                    samplesArray);

            var result = sourceReader.ReadMonoFromSource("path-to-audio-file", SampleRate, SecondsToRead, StartAt);

            Assert.AreSame(samplesArray, result);
        }
    }
}