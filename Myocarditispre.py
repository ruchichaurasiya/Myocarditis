from flask import Flask, render_template, request
import pandas as pd
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
from sklearn.metrics import accuracy_score
import warnings
warnings.filterwarnings("ignore")

# Load the dataset
data = pd.read_csv("test.csv", sep="\t", header=None, names=["text", "label"])

# Check data
print(data.head())
print(data['label'].value_counts())

# Text preprocessing: Vectorization
tfidf = TfidfVectorizer(max_features=5000, stop_words='english')
X = tfidf.fit_transform(data['text']).toarray()
y = data['label']

# Split the dataset
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Train a Logistic Regression model
model = LogisticRegression()
model.fit(X_train, y_train)

# Evaluate the model
y_pred = model.predict(X_test)
accuracy = accuracy_score(y_test, y_pred)
print(f"Model Accuracy: {accuracy * 100:.2f}%")

# Initialize Flask app
app = Flask(__name__, template_folder='templates')

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        # Get user input
        user_input = request.form['text']
        
        # Preprocess and predict
        input_vector = tfidf.transform([user_input])
        prediction = model.predict(input_vector)
        probability = model.predict_proba(input_vector).max() * 100

        # Render result
        if prediction[0] == 0:
            message = f"{probability:.2f}% - This text has a negative sentiment."
        elif prediction[0] == 1:
            message = f"{probability:.2f}% - This text has a positive sentiment."
        else:
            message = f"{probability:.2f}% - This text has a neutral sentiment."
        
        return render_template('result1.html', prediction_text=message)

    return render_template('form1.html')

# Run the Flask app
if __name__ == '__main__':
    app.run(debug=True)
