<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="citation_journal_title" content="Web3 Journal: ML in Health Science"/>
    <meta name="citation_journal_abbrev" content="Web3MLHS"/>
    <meta name="citation_issn" content="2942-8726"/> 
    <meta name="citation_author" content="Yury  Rusinovich"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predict Varicose Vein Risk with AI</title>
    <link rel="icon" type="image/png" href="https://mlhs.ink/favicon.png">
    <meta name="description" content="Predict your risk of varicose veins using our advanced AI tool based on 81 global studies. Secure, on-browser calculations ensure your data privacy.">
    <meta name="keywords" content="Varicose veins prediction, AI health tool, machine learning model, TensorFlow.js, healthcare AI, varicose veins risk assessment, global disease prevalence, medical AI app, predictive health tool, on-browser AI">
    <meta name="author" content="ML in Health Science, info@mlhs.ink">

    <meta property="og:title" content="Predict Varicose Vein Risk with AI"/>
    <meta property="og:description" content="Discover your varicose vein risk with our advanced machine learning tool. No data transfer – calculations performed in your browser for maximum privacy." />
    <meta property="og:image" content="https://mlhs.ink/logo.png"/>
    <meta property="og:url" content="https://www.mlhs.ink"/>
    <meta property="og:type" content="website"/>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Predict Varicose Vein Risk with AI">
    <meta name="twitter:description" content="Discover your varicose vein risk with our advanced machine learning tool. No data transfer – calculations performed in your browser for maximum privacy.">
    <meta name="twitter:site" content="@MLHealthScience">
    <meta name="twitter:image" content="https://mlhs.ink/logo.png">
    <meta name="twitter:image:alt" content="MLHS logo">
    <meta name="citation_issn" content="2942-8726" />
    <meta name="citation_publisher" content="ML in Health Science" />
    <meta name="citation_journal_title" content="Web3 Journal: ML in Health Science" />
    <link rel="canonical" href="https://mlhs.ink/varicose/" />
    <meta name="robots" content="index, follow">

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebApplication",
  "name": "Varicose Veins Risk Predictor",
  "url": "https://www.mlhs.ink/varicose/",
  "description": "Predict your risk of developing varicose veins using our advanced AI model based on 81 global studies.",
  "applicationCategory": "HealthApplication",
  "operatingSystem": "All",
  "browserRequirements": "Requires JavaScript. Compatible with modern browsers.",
  "creator": {
    "@type": "Person",
    "name": "Yury Rusinovich"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  }
}
</script>


    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            text-align: center;
            margin: 20px auto;
            color: #606F90;
        }

        .logo-header {
            margin: 10px auto;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .logo-header img {
            width: 30px;
            margin-right: 10px;
            box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.25);
        }

        .input-container {
            margin: 20px auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .input-container label {
            margin: 5px 0;
        }

        .hover-zoom {
            border-radius: 50px;
            box-shadow: rgba(0, 0, 0, 0.9) 0px 4px 8px;
            display: flex;
            transition: transform 0.3s ease; /* Smooth zoom effect */
        }

        /* Hover effect */
        .hover-zoom:hover {
            transform: scale(1.1); /* Zoom in on hover */
        }

        #predictButton {
            padding: 10px;
            margin: 5px 3px;
            background-color: rgba(99, 146, 248, 0.75);
            border: none;
            border-radius: 999px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #predictButton:hover {
            background-color: rgba(99, 146, 248, 1);
        }
        #predictionResult {
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
        }
        #statusMessage {
            margin-bottom: 20px;
            font-size: 1.2em;
            color: red;
            font-weight: bold;
        }
        h3 {
            text-align: center;
            color: rgba(99, 146, 248, 1);
            line-height: 150%;
        }

        .image-container {
            position: relative;
            display: inline-block;
            max-width: 100%;
            width: 100%;
        }
        .image-container img {
            width: 100%;
            height: auto;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        .dot {
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: red;
            border-radius: 50%;
            pointer-events: none;
            display: none;
        }

        .linked-text-container {
            width: 90%;
            text-align: left;
            margin: 30px auto;
            font-size: 16px;
            max-width: 800px; 
        }

        .linked {
            margin: 30px auto;
            font-size: 90%;
            max-width: 800px; 
            color: #a1aabf;
        }

        .about {
            width: 90%;
            text-align: left;
            margin: 30px auto;
            font-size: 16px;
            max-width: 800px; 
        }
        .references {
            width: 90%;
            text-align: left;
            margin: 30px auto;
            font-size: 16px;
            max-width: 800px; 
        }
        .about1 {
            width: 90%;
            text-align: left;
            margin: 30px auto;
            font-size: 14px;
            max-width: 800px;
        }
        a {
            color: #6392F8;
            text-decoration: none;
        }

        a:hover {
            color: #194CBC;
            text-decoration: underline;
        }

        @media (max-width: 799px) {
            .image-container {
                width: 90%;
            }
            .logo-header img {
                max-width: 80px;
            }
            .input-container {
                width: 90%;
            }
            .dot {
                width: 5px;
                height: 5px;
            }

        }

        @media (min-width: 1200px) {
            .image-container {
                max-width: 800px;
            }
        }
/* Styles for comments section */
.comments-section {
    text-align: left;
    margin: 20px auto;
    max-width: 92%;
    width: 500px;
    background-color: #d3d5db;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
}
.comments-section h3 {
    color: #63a4ff;
    margin-bottom: 10px;
}
.comments-section form {
    display: flex;
    flex-direction: column;
}
.comments-section textarea {
    width: 100%;
    height: 100px;
    padding: 10px;
    border: 1px solid #555;
    border-radius: 4px;
    resize: vertical;
    font-size: 14px;
    color: #606F90;
    background-color: #f5f6fa;
}
.comments-section input[type="submit"] {
    margin-top: 10px;
    padding: 10px;
    background-color: #63a4ff;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.comments-section input[type="submit"]:hover {
    background-color: #5591e6;
}
.comments-display {
    margin-top: 20px;
    max-height: 300px;
    overflow-y: auto;
    padding-right: 10px;
}
.comments-display p {
    border-bottom: 1px solid #555;
    padding-bottom: 10px;
    margin-bottom: 10px;
    word-wrap: break-word;
}
.comments-display p:last-child {
    border-bottom: none;
}

        @media (max-width: 600px) {
            .comments-section {
                width: 350px;
                font-size: 90%;
            }
        }


    </style>
</head>

<body>
    <div id="statusMessage"></div> <!-- Status container for errors and instructions -->
    <div class="logo-header">
    <p>
        <a title="Logo" href="https://mlhs.ink/Playground/" target="_blank" rel="noopener">
            <img class="hover-zoom" src="https://mlhs.ink/logo.png" alt="Logo">
        </a>
    </p>
        <h3>Varicose veins prediction</h3>
    </div>
    

    <div class="linked-text-container">
        <p> Click on this world map at your location. Then, fill in the fields with your age, gender, and body mass index, and press the "Predict" button. The chance of getting varicose veins will be displayed as a percentage (%).</p>
        
        <b style="font-size: 80%;">All calculations will be performed on the user's side in the browser, ensuring privacy with no data transfer to third-party servers.</b>
    </div>

    <div class="image-container">
        <img id="colorMapImage" class="grace" src="https://mlhs.ink/varicose/grace800.png" alt="Color Values">
        <img id="graceImage" class="overlay" src="https://mlhs.ink/varicose/world800.jpg" alt="Grace">
        <div id="clickDot" class="dot"></div>
    </div> 

    <div class="input-container" id="inputContainer">
        <!-- Input fields will be generated dynamically -->
    </div>
    <button id="predictButton" onclick="makePrediction()">Predict</button>
    <div id="predictionResult"></div>

    <div class="about">
        <h5>Author: Yury Rusinovich</h5>
        <h5>Email: yury.rusinovich@gmail.com</h5>
        <h5>Deployment Date: 2025-01-02 09:32:03</h5>
        <h5>References:</h5>
    </div>

    <div class="references" style="font-size: 80%;">
        <a href="https://journals.sagepub.com/doi/abs/10.1177/02683555221090054">Research paper</a>
        <br></br>
        <a href="https://www2.csr.utexas.edu/grace/gravity/">Source of the map</a>
    </div>

    <div class="about1">
        <h4>Performance and Training Settings:</h4>
        <p>Test Loss: 0.49169594049453735</p>
        <p>Validation Loss: 0.9123176336288452</p>
        <p>Training Loss:  0.876839816570282</p>
        <p>Test MAE: 0.5590166449546814</p>
        <p>Validation MAE: 0.8001748323440552</p>
        <p>Training MAE: 0.6520715355873108</p>
        <p>R2 score: 0.362848530381088</p>
        <p>Data Counts (n): 81</p>
        <p>Outcome: Varicose % (Outcome): Mean = 23.455, SD = 11.972</p>
        <p>Predictors (n): Gravity of the region (mGal): Mean = 15.481, SD = 14.356, p-Value = 0.001; Age in years: Mean = 41.228, SD = 10.859, p-Value = 0; Gender (0=male, 100=female): Mean = 60.06, SD = 27.934, p-Value = 0.657; Body mass index ( kg/m²): Mean = 26.058, SD = 1.491, p-Value = 0.203</p>
        <p>L2 Legularization: 0.01</p>
        <p>Number of Epochs: 406</p>
        <p>Initial Learning Rate: 0.001</p>
        <p>Batch Size: 32</p>
    </div>

    <br></br>
<div class="comments-section">
    <h3>Add a Comment:</h3>
    <form action="submit_comment.php" method="POST" id="comment-form">
        <textarea name="comment" placeholder="Enter your comment here..." required></textarea>
        <input type="submit" value="Submit">
    </form>
    
    <h3>Comments:</h3>
    <div class="comments-display">
        <?php include 'submit_comment.php'; ?>
    </div>
</div>

    <div id="usage-count" style="color: #6392F8; font-size: 75%;">
        <h4>This app has been used <span id="app-usage">0</span> times for predictions.</h4>
    </div>

    <div class="linked">
        <span>This machine learning model could be</span>
        <a href="https://mlhs.ink/varicose/trained_model.zip">downloaded</a>
        <span>and retrained by adding new data</span>
        <a href="https://mlhs.ink/Playground/#SDC">here</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@3.11.0/dist/tf.min.js"></script>
    <script>
        let model;
        let standardizationParams;
        let predictors;

        // Define the color scale with corresponding numerical values
        const colorScale = [
            { r: 25, g: 20, b: 79, value: -80 },
            { r: 19, g: 16, b: 69, value: -75 },
            { r: 27, g: 54, b: 97, value: -70 },
            { r: 22, g: 55, b: 97, value: -65 },
            { r: 3, g: 77, b: 110, value: -60 },
            { r: 20, g: 71, b: 119, value: -55 },
            { r: 41, g: 54, b: 148, value: -50 },
            { r: 53, g: 73, b: 159, value: -45 },
            { r: 57, g: 118, b: 167, value: -40 },
            { r: 59, g: 86, b: 167, value: -35 },
            { r: 64, g: 112, b: 113, value: -30 },
            { r: 72, g: 150, b: 209, value: -25 },
            { r: 57, g: 195, b: 247, value: -20 },
            { r: 104, g: 203, b: 222, value: -15 },
            { r: 115, g: 202, b: 193, value: -10 },
            { r: 133, g: 200, b: 140, value: -5 },
            { r: 162, g: 207, b: 115, value: 0 },
            { r: 197, g: 216, b: 50, value: 5 },
            { r: 231, g: 231, b: 19, value: 10 },
            { r: 254, g: 220, b: 0, value: 15 },
            { r: 249, g: 180, b: 23, value: 20 },
            { r: 244, g: 122, b: 33, value: 25 },
            { r: 240, g: 81, b: 35, value: 30 },
            { r: 237, g: 37, b: 37, value: 35 },
            { r: 239, g: 27, b: 35, value: 40 },
            { r: 165, g: 31, b: 34, value: 45 },
            { r: 239, g: 21, b: 24, value: 50 },
            { r: 101, g: 79, b: 30, value: 55 },
            { r: 108, g: 71, b: 30, value: 60 },
            { r: 102, g: 53, b: 20, value: 65 },
            { r: 69, g: 17, b: 19, value: 70 },
            { r: 70, g: 18, b: 20, value: 75 },
            { r: 56, g: 18, b: 14, value: 80 }
        ];

        // Interpolate colors for intermediate steps
        function interpolateColor(startColor, endColor, steps) {
            const stepFactor = 1 / (steps - 1),
                  interpolatedColorArray = [];

            for (let i = 0; i < steps; i++) {
                interpolatedColorArray.push({
                    r: Math.round(startColor.r + stepFactor * i * (endColor.r - startColor.r)),
                    g: Math.round(startColor.g + stepFactor * i * (endColor.g - startColor.g)),
                    b: Math.round(startColor.b + stepFactor * i * (endColor.b - startColor.b)),
                    value: Math.round(startColor.value + stepFactor * i * (endColor.value - startColor.value))
                });
            }

            return interpolatedColorArray;
        }

        function generateFullColorScale(colorScale) {
            let fullColorScale = [];
            for (let i = 0; i < colorScale.length - 1; i++) {
                fullColorScale = fullColorScale.concat(interpolateColor(colorScale[i], colorScale[i + 1], 5));
            }
            return fullColorScale;
        }

        const fullColorScale = generateFullColorScale(colorScale);

        // Load the model and standardization parameters
        async function loadModelAndParams() {
            try {
                console.log('Loading model...');
                model = await tf.loadLayersModel('https://mlhs.ink/varicose/static/model.json');
                console.log('Model loaded successfully.');
            } catch (error) {
                console.error('Error loading model:', error);
                alert('Failed to load model.json. Please ensure the file exists and is accessible.');
                return;
            }

            try {
                console.log('Loading standardization parameters...');
                const response = await fetch('https://mlhs.ink/varicose/static/standardization.json');
                if (!response.ok) throw new Error('Network response was not ok');
                standardizationParams = await response.json();
                console.log('Standardization parameters loaded successfully.');
            } catch (error) {
                console.error('Error loading standardization parameters:', error);
                alert('Failed to load standardization.json. Please ensure the file exists and is accessible.');
                return;
            }

            try {
                console.log('Loading training data...');
                const trainingDataResponse = await fetch('https://mlhs.ink/varicose/static/training-data.json');
                if (!trainingDataResponse.ok) throw new Error('Network response was not ok');
                const trainingData = await trainingDataResponse.json();
                predictors = trainingData.predictorNames;
                console.log('Training data loaded successfully.');
            } catch (error) {
                console.error('Error loading training data:', error);
                alert('Failed to load training-data.json. Please ensure the file exists and is accessible.');
                return;
            }

            try {
                console.log('Loading initial weights...');
                const initialWeightsResponse = await fetch('https://mlhs.ink/varicose/static/initialWeights.json');
                if (!initialWeightsResponse.ok) throw new Error('Network response was not ok');
                const initialWeights = await initialWeightsResponse.json();
                setModelWeights(model, initialWeights);
                console.log('Initial weights loaded successfully.');
            } catch (error) {
                console.error('Error loading initial weights:', error);
                alert('Failed to load initialWeights.json. Please ensure the file exists and is accessible.');
                return;
            }

            createInputFields();
        }

function createInputFields() {
    const inputContainer = document.getElementById('inputContainer');
    console.log('Creating input fields for predictors:', predictors);  // Debugging log
    predictors.forEach((predictor, index) => {
        const label = document.createElement('label');
        label.textContent = predictor;
        const input = document.createElement('input');
        input.type = 'number';
        input.id = `input-${index}`;
        inputContainer.appendChild(label);
        inputContainer.appendChild(input);
    });
}


        function standardizeData(data, means, stdDevs) {
            return data.map((value, index) => (value - means[index]) / stdDevs[index]);
        }

        function destandardizePrediction(prediction, mean, stdDev) {
            return (prediction * stdDev) + mean;
        }

        function setModelWeights(model, weightsData) {
            const weights = weightsData.map(weightArray => tf.tensor(weightArray));
            model.setWeights(weights);
        }

async function makePrediction() {
    const inputs = [];
    predictors.forEach((_, index) => {
        const inputElement = document.getElementById(`input-${index}`);
        const inputValue = parseFloat(inputElement.value);
        if (isNaN(inputValue)) {
            alert(`Please enter a valid number for ${predictors[index]}`);
            return;
        }
        inputs.push(inputValue);
    });

    const standardizedInputs = standardizeData(inputs, standardizationParams.inputMeans, standardizationParams.inputStdDevs);
    const inputTensor = tf.tensor2d([standardizedInputs]);
    const prediction = model.predict(inputTensor);
    const predictionValue = (await prediction.data())[0];
    const destandardizedPredictionValue = destandardizePrediction(predictionValue, standardizationParams.labelMean, standardizationParams.labelStdDev);

    document.getElementById('predictionResult').textContent = `Prediction: ${destandardizedPredictionValue.toFixed(3)}%`;

    // Increment usage count after prediction is successfully made
    incrementUsageCount();
}

function incrementUsageCount() {
    fetch('usage.php', {
        method: 'POST'
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('app-usage').innerText = data.count;
    })
    .catch(error => {
        console.error('Error updating usage count:', error);
    });
}


        function getColorAtPoint(image, x, y) {
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');
            canvas.width = image.width;
            canvas.height = image.height;
            context.drawImage(image, 0, 0, image.width, image.height);
            const pixelData = context.getImageData(x, y, 1, 1).data;
            return { r: pixelData[0], g: pixelData[1], b: pixelData[2] }; // Return the RGB value
        }

        function findClosestColor(rgb) {
            let closestColor = fullColorScale[0];
            let minDistance = Number.MAX_VALUE;

            for (const color of fullColorScale) {
                const distance = Math.sqrt(
                    Math.pow(color.r - rgb.r, 2) +
                    Math.pow(color.g - rgb.g, 2) +
                    Math.pow(color.b - rgb.b, 2)
                );

                if (distance < minDistance) {
                    minDistance = distance;
                    closestColor = color;
                }
            }

            return closestColor.value;
        }



        document.addEventListener('DOMContentLoaded', async () => {
            await loadModelAndParams();

            const graceImage = document.getElementById('graceImage');
            const colorMapImage = document.getElementById('colorMapImage');
            const clickDot = document.getElementById('clickDot');
            if (graceImage && colorMapImage) {
                console.log('Image elements found:', graceImage, colorMapImage);
                graceImage.addEventListener('click', (event) => {
                    console.log('Image clicked');
                    const rect = graceImage.getBoundingClientRect();
                    const x = event.clientX - rect.left;
                    const y = event.clientY - rect.top;
                    const rgb = getColorAtPoint(colorMapImage, x, y);
                    if (rgb.r === 255 && rgb.g === 255 && rgb.b === 255) {
                        document.getElementById('statusMessage').textContent = 'Invalid color: white';
                        clickDot.style.display = 'none';
                        return;
                    } else {
                        document.getElementById('statusMessage').textContent = '';
                    }
                    const colorValue = findClosestColor(rgb);
                    console.log('RGB value at clicked point:', rgb);
                    console.log('Color value at clicked point:', colorValue);
                    document.getElementById('input-0').value = colorValue;

                    // Update and show the red dot
                    clickDot.style.left = `${x - 5}px`;
                    clickDot.style.top = `${y - 5}px`;
                    clickDot.style.display = 'block';
                });
            } else {
                console.error('Image elements not found');
            }
        });

        document.getElementById('comment-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            const formData = new FormData(this);

            fetch('submit_comment.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Update the comments display
                document.querySelector('.comments-display').innerHTML = data;
                // Clear the textarea
                this.reset();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });


    function loadUsageCount() {
        fetch('usage.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('app-usage').innerText = data.count;
            })
            .catch(error => {
                console.error('Error fetching usage count:', error);
                document.getElementById('app-usage').innerText = 'Error';
            });
    }


window.onload = function() {
    loadUsageCount();  // Load usage count without incrementing
    // Removed loadModelAndParams() from here
};


    </script>
</body>
</html>
