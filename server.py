import pandas as pd
from sklearn.linear_model import LogisticRegression
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score

# Example dataframe
data = {
    'text': ['im feeling rather rotten', 'im updating my blog', 'i never make her separate from me', 'i left with my bouquet'],
    'label': [None, None, 1, 0]  # Example labels with NaN values
}

df = pd.DataFrame(data)

# Remove rows with NaN values in 'label' column
df = df.dropna(subset=['label'])

# Alternatively, you can fill NaN values with a default value, like 0
# df['label'] = df['label'].fillna(0)

# Check for NaN values
if df['label'].isnull().any():
    print("There are NaN values in the target variable")
else:
    print("No NaN values in the target variable")

# Example feature extraction (you can replace this with your actual feature extraction)
# For this example, we'll just use the length of the text as a feature.
df['text_length'] = df['text'].apply(len)

# Define features and target variable
X = df[['text_length']]  # Using text_length as a feature
y = df['label']

# Split the data into training and test sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Initialize and train the model
model = LogisticRegression()
model.fit(X_train, y_train)

# Predict on the test set
y_pred = model.predict(X_test)

# Evaluate the model
print("Accuracy:", accuracy_score(y_test, y_pred))
