function genererCourrierConvocation() {
    const courrierHTML = `
    <html>
      <head>
        <style>
          @page {
            size: A4;
            margin: 20mm 15mm 30mm 15mm;
          }
    
          body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            margin: 0;
            padding: 0;
          }
    
          .letter-header {
            text-align: right;
            margin-bottom: 20px;
          }
    
          .letter-header .logo {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
          }
    
          .letter-content {
            margin-bottom: 20px;
          }
    
          .letter-content .title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
          }
    
          .letter-content .date {
            font-size: 14px;
            margin-bottom: 5px;
          }
    
          .letter-content .address {
            font-size: 14px;
            margin-bottom: 20px;
          }
    
          .letter-content .greeting {
            font-size: 14px;
            margin-bottom: 10px;
          }
    
          .letter-content .body {
            font-size: 12px;
            margin-bottom: 20px;
          }
    
          .letter-content .closing {
            font-size: 14px;
            margin-bottom: 10px;
          }
    
          .letter-content .signature {
            font-size: 14px;
            font-weight: bold;
          }
        </style>
      </head>
      <body>
        <div class="letter-header">
          <img src="logo.png" alt="Logo" class="logo">
          <div>Association XYZ</div>
          <div>Adresse de l'association</div>
          <div>Téléphone : 01 234 5678</div>
        </div>
        <div class="letter-content">
          <div class="title">Convocation à l'assemblée générale constitutive</div>
          <div class="date">Date: 5 juin 2023</div>
          <div class="address">
            Adresse du destinataire<br>
            Ville, Code Postal
          </div>
          <div class="greeting">Cher(e) membre de l'association,</div>
          <div class="body">
            <div class="paragraphe">Nous vous convions à participer à l'assemblée générale constitutive</div>
            <div class="paragraphe">de notre association qui se tiendra le 5 juin 2023 à 18h00</div>
            <div class="paragraphe">dans la salle de réunion XYZ.</div>
            <div class="sous-titre">Ordre du jour:</div>
            <div class="paragraphe">1. Présentation du projet associatif</div>
            <div class="paragraphe">2. Adoption des statuts</div>
            <div class="paragraphe">3. Élection du bureau</div>
            <div class="paragraphe">4. Questions diverses</div>
            <div class="paragraphe">Nous comptons sur votre présence et votre engagement</div>
            <div class="paragraphe">pour contribuer à la réussite de notre association.</div>
          </div>
          <div class="closing">Cordialement,</div>
          <div class="signature">Le président de l'association</div>
        </div>
      </body>
    </html>
  `;

    const options = {
        filename: 'convocation_assemblee_generale.pdf',
        margin: 10,
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
    };

    html2pdf().set(options).from(courrierHTML).save();
}

// Appeler la fonction pour générer le courrier de convocation lorsque le bouton est cliqué
document.querySelector('.button').addEventListener('click', genererCourrierConvocation);
