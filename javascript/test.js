// Fonction pour générer le courrier de convocation
function genererCourrierConvocation() {
    // Créer un nouveau document jsPDF
    const doc = new jsPDF();

    // Texte d'en-tête
    doc.setFontSize(16);
    doc.text('Association XYZ', 10, 10);

    // Informations de l'assemblée générale
    doc.setFontSize(12);
    doc.text('Convocation à l\'assemblée générale constitutive', 10, 20);
    doc.text('Date: 5 juin 2023', 10, 30);
    doc.text('Heure: 18h00', 10, 40);
    doc.text('Lieu: Salle de réunion XYZ', 10, 50);

    // Contenu du courrier
    doc.setFontSize(14);
    doc.text('Chers membres de l\'association,', 10, 70);
    doc.text('Nous vous convions à participer à l\'assemblée générale constitutive', 10, 80);
    doc.text('de notre association qui se tiendra le 5 juin 2023 à 18h00', 10, 90);
    doc.text('dans la salle de réunion XYZ.', 10, 100);

    doc.setFontSize(12);
    doc.text('Ordre du jour:', 10, 120);
    doc.setFontSize(10);
    doc.text('1. Présentation du projet associatif', 10, 130);
    doc.text('2. Adoption des statuts', 10, 140);
    doc.text('3. Élection du bureau', 10, 150);
    doc.text('4. Questions diverses', 10, 160);

    doc.setFontSize(12);
    doc.text('Nous comptons sur votre présence et votre engagement', 10, 180);
    doc.text('pour contribuer à la réussite de notre association.', 10, 190);

    doc.setFontSize(10);
    doc.text('Cordialement,', 10, 210);
    doc.text('Le président de l\'association', 10, 220);
    doc.text('Nom du président', 10, 230);

    // Sauvegarder le document en tant que fichier PDF
    doc.save('convocation_assemblee_generale.pdf');
}