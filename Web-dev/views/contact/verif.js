function verif()
{var mail = f.mail_inscr.value; //mail =name;
var name = f.nom.value;
  var sujet = f.sname.value; 
  var msg=f.message.value;
   var mail1 = mail.indexOf(mail);
   
if (mail.length==0 || name.length==0 || sujet.length==0 || msg.length==0 )

      { document.getElementById('mail').style.border="#cc3300 2px solid";
        document.getElementById('sname').style.border="#cc3300 2px solid";
        document.getElementById('nom').style.border="#cc3300 2px solid";
        document.getElementById('message').style.border="#cc3300 2px solid";
        
      }
   else 
      {if(mail.indexOf("@")==-1 || mail.indexOf(".")==-1  )
        { document.getElementById('mail').style.border="#cc3300 2px solid";
     document.getElementById('mail').value="votre mail est erroné";
       document.getElementById('sname').style.border="#e4ecf3 1px solid";
        document.getElementById('nom').style.border="#e4ecf3 1px solid";
        document.getElementById('message').style.border="#e4ecf3 1px solid";
        
        }
        else if(mail.indexOf("@")!=-1 && mail.indexOf(".")!=-1 )
        {document.getElementById('mail').style.border="#e4ecf3 1px solid";
    
       document.getElementById('sname').style.border="#e4ecf3 1px solid";
        document.getElementById('nom').style.border="#e4ecf3 1px solid";
        document.getElementById('message').style.border="#e4ecf3 1px solid";}
      
         
        
            
      }
   }
   
   