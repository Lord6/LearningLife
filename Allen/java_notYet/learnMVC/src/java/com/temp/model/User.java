package com.temp.model;

public class User{
  
      private String Name;
      private String Email;
      
      public User(){}
      public User( String Name,String Email){
      
      this.Name=Name;
      this.Email=Email;
      
      
      
     
      
      }

    /**
     * @return the Name
     */
    public String getName() {
        return Name;
    }

    /**
     * @param Name the Name to set
     */
    public void setName(String Name) {
        this.Name = Name;
    }

    /**
     * @return the Email
     */
    public String getEmail() {
        return Email;
    }

    /**
     * @param Email the Email to set
     */
    public void setEmail(String Email) {
        this.Email = Email;
    }
      
        
    
    
    
    
}
