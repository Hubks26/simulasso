function validate()
{
    if (!document.getElementById('accept-conditions').checked)
    {
        alert("Vous devez accepter les conditions pour continuer");
    }
}