function mdp()
{
   
    let pwd=document.getElementById('password').value;
    let cpwd=document.getElementById('cpassword').value;
    let message=document.getElementById('message');
    if(pwd.length!=null)
    {
        if(pwd==cpwd)
        {
            message.textContent="passwords match";
            message.style.backgroundColor="green";
            message.style.color='white';
            document.getElementById("fo").addEventListener('submit',function(e)
            {
                alert("votre inscription  est en cours de traitement");
            }),false;
        }
        else
        {
            message.textContent="password don`t match";
            message.style.backgroundColor="red";

        }
    }
    else
    {
        alert("mot de passe ne doit pas etre vide");
        
    }

}