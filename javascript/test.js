// Fonction pour générer le courrier de convocation
function genererCourrierConvocation() {
    // Créer un nouveau document jsPDF
    const doc = new jsPDF();

    // Définir les styles de texte
    const styles = {
        enTete: { fontSize: 16, fontStyle: 'bold', align: 'center' },
        titre: { fontSize: 14, fontStyle: 'bold', align: 'left', marginTop: 10 },
        sousTitre: { fontSize: 12, fontStyle: 'bold', align: 'left', marginTop: 5 },
        paragraphe: { fontSize: 12, fontStyle: 'normal', align: 'left', marginTop: 5 },
        signature: { fontSize: 10, fontStyle: 'normal', align: 'right', marginTop: 20 },
    };

    // Fonction pour ajouter un paragraphe avec un style donné
    function ajouterParagraphe(texte, style) {
        doc.setFontSize(style.fontSize);
        doc.setFontStyle(style.fontStyle);
        doc.text(texte, 10, doc.autoTable.previous.finalY + style.marginTop, { align: style.align });
    }

    // Texte d'en-tête
    doc.setFontSize(styles.enTete.fontSize);
    doc.setFontStyle(styles.enTete.fontStyle);
    doc.text('Association XYZ', 105, 20, { align: 'center' });

    // Informations de l'assemblée générale
    doc.setFontSize(styles.titre.fontSize);
    doc.setFontStyle(styles.titre.fontStyle);
    doc.text('Convocation à l\'assemblée générale constitutive', 20, 40);

    doc.setFontSize(styles.sousTitre.fontSize);
    doc.setFontStyle(styles.sousTitre.fontStyle);
    doc.text('Date: 5 juin 2023', 20, 50);
    doc.text('Heure: 18h00', 20, 55);
    doc.text('Lieu: Salle de réunion XYZ', 20, 60);

    // Contenu du courrier
    ajouterParagraphe('Chers membres de l\'association,', styles.paragraphe);
    ajouterParagraphe('Nous vous convions à participer à l\'assemblée générale constitutive', styles.paragraphe);
    ajouterParagraphe('de notre association qui se tiendra le 5 juin 2023 à 18h00', styles.paragraphe);
    ajouterParagraphe('dans la salle de réunion XYZ.', styles.paragraphe);

    doc.setFontSize(styles.sousTitre.fontSize);
    doc.setFontStyle(styles.sousTitre.fontStyle);
    ajouterParagraphe('Ordre du jour:', styles.sousTitre);

    doc.setFontSize(styles.paragraphe.fontSize);
    doc.setFontStyle(styles.paragraphe.fontStyle);
    ajouterParagraphe('1. Présentation du projet associatif', styles.paragraphe);
    ajouterParagraphe('2. Adoption des statuts', styles.paragraphe);
    ajouterParagraphe('3. Élection du bureau', styles.paragraphe);
    ajouterParagraphe('4. Questions diverses', styles.paragraphe);

    ajouterParagraphe('Nous comptons sur votre présence et votre engagement', styles.paragraphe);
    ajouterParagraphe('pour contribuer à la réussite de notre association.', styles.paragraphe);

    doc.setFontSize(styles.signature.fontSize);
    doc.setFontStyle(styles.signature.fontStyle);
    ajouterParagraphe('Cordialement,', styles.signature);
    ajouterParagraphe('Le président de l\'association', styles.signature);
    ajouterParagraphe('Nom du président', styles.signature);

    // Sauvegarder le document en tant que fichier PDF
    doc.save('convocation_assemblee_generale.pdf');
}