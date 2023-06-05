function readFile(path) {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    resolve(xhr.responseText);
                } else {
                    reject(new Error('Error reading file: ' + xhr.status));
                }
            }
        };
        xhr.open('GET', path, true);
        xhr.send();
    });
}

function genererCourrierConvocation() {

    const csvFilePath = './../documents/assemblee1.csv';

    readFile(csvFilePath)
        .then(csvString => {
            let result = Papa.parse(csvString)


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
            font-size: 13px;
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
          <div>`+ result.data[0][0]+`</div>
        </div>
        <div class="letter-content">
          <div class="title">Convocation à l'assemblée générale constitutive</div>
          <div class="greeting">Cher(e) membre de l'association,</div>
          <div class="body">
            <div class="paragraphe">Nous vous convions à participer à l'assemblée générale constitutive
            de notre association qui se tiendra le `+ result.data[0][5] +`   à   `+ result.data[0][6] +` l'adresse suivante : `+ result.data[0][7] +`.</div><br><br>
            <div class="sous-titre">Ordre du jour:</div><br>
            <div class="paragraphe">1. Présentation du projet associatif</div>
            <div class="paragraphe">2. Adoption des statuts</div>
            <div class="paragraphe">3. Élection du bureau</div>
            <div class="paragraphe">4. Questions diverses</div><br>
            <div class="paragraphe">Nous comptons sur votre présence et votre engagement
            pour contribuer à la réussite de notre association.</div>
          </div>
          <div class="closing">Cordialement,</div>
          <div class="signature">`+ result.data[0][3] + ` ` + result.data[0][2] +`</div>
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






        })




}

// Appeler la fonction pour générer le courrier de convocation lorsque le bouton est cliqué
document.querySelector('.button').addEventListener('click', genererCourrierConvocation);
