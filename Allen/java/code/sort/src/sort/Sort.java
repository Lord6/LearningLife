/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package sort;

/**
 *
 * @User:Huang Yi
 */
public class Sort {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        int [] number={70,80,31,37,10,1,48,60,33,80};
        int min;
        int temp;
        for(int i=0;i<number.length;i++){
           min=number[i];
           for(int j=i+1;j<number.length;j++){
              if(min>number[j]){
                  temp=min;
                  min=number[j];
                  number[j]=temp;
              }
           }
           number[i]=min;
        }
        
        for(int value:number){
            System.out.println(value);
        }
     }
 }
 


