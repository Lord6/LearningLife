﻿namespace SoundFingerprinting.Strides
{
    using System;

    /// <summary>
    ///   Random stride object. [min - max Samples stride]
    /// </summary>
    [Serializable]
    public class RandomStride : IStride
    {
        protected static readonly Random Random = new Random(unchecked((int)DateTime.Now.Ticks));

        private readonly int maxStride;

        private readonly int minStride;

        private int firstStride;

        /// <summary>
        /// Initializes a new instance of the <see cref="RandomStride"/> class. 
        /// </summary>
        /// <param name="minStride">
        /// Minimum stride size, generated by this object
        /// </param>
        /// <param name="maxStride">
        /// Maximum stride size, generated by this object
        /// </param>
        public RandomStride(int minStride, int maxStride)
        {
            if (minStride > maxStride)
            {
                throw new ArgumentException("Bad arguments. Max stride should be bigger than Min stride");
            }

            this.minStride = minStride;
            this.maxStride = maxStride;
            firstStride = Random.Next(minStride, maxStride);
        }

        public RandomStride(int minStride, int maxStride, int firstStride)
            : this(minStride, maxStride)
        {
            this.firstStride = firstStride;
        }

        public int Min
        {
            get
            {
                return minStride;
            }
        }

        public int Max
        {
            get
            {
                return maxStride;
            }
        }

        public int FirstStride
        {
            get
            {
                return firstStride;
            }

            protected set
            {
                firstStride = value;
            }
        }

        public virtual int GetNextStride()
        {
            return Random.Next(minStride, maxStride);
        }
    }
}