CREATE TABLE jokes (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Content TEXT,
    Description TEXT,
    Status VARCHAR(10) DEFAULT 'active',
    LastUpdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    Since TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE jokeInteractions (
    interactionId INT AUTO_INCREMENT PRIMARY KEY,
    jokeId INT,
    userIdentifier VARCHAR(100),
    vote VARCHAR(10),
    LastUpdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    Since TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (jokeId) REFERENCES jokes(Id)
);
INSERT INTO jokes (Content, Description)
VALUES 
(
    'A child asked his father, "How were people born?" So his father said, "Adam and Eve made babies, then their babies became adults and made babies, and so on." The child then went to his mother, asked her the same question and she told him, "We were monkeys then we evolved to become like we are now." The child ran back to his father and said, "You lied to me!" His father replied, "No, your mom was talking about her side of the family."',
    'Family-related Joke'
),
(
    'Teacher: "Kids, what does the chicken give you?" Student: "Meat!" Teacher: "Very good! Now what does the pig give you?" Student: "Bacon!" Teacher: "Great! And what does the fat cow give you?" Student: "Homework!"',
    'School-related Joke'
),
(
    'The teacher asked Jimmy, "Why is your cat at school today Jimmy?" Jimmy replied crying, "Because I heard my daddy tell my mommy, "I am going to eat that pussy once Jimmy leaves for school today!""',
    'School-related Joke'
),
(
    'A housewife, an accountant and a lawyer were asked "How much is 2+2?" The housewife replies: "Four!". The accountant says: "I think it\s either 3 or 4. Let me run those figures through my spreadsheet one more time." The lawyer pulls the drapes, dims the lights and asks in a hushed voice, "How much do you want it to be?"',
    'Humorous Math-related Joke'
);

