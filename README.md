# zens-test - Joke Voting App

This application allows users to view jokes and vote on them. It displays a single joke for the user to read, allows the user to like or dislike the joke, and records the vote in a database. When all available jokes have been voted on, it shows a message indicating the end of available jokes for the day.

## Features

- Display a single joke to the user.
- Allow users to like or dislike the joke.
- Record votes in a database.
- Prevent users from seeing the same joke twice.
- Use cookies to track user votes (even if the user clears their cookies).

## Technology Stack

- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL

## Setup

### Prerequisites

- Docker

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/TKV-LF/zens-test.git
2. Navigate to the project directory:

   ```bash
      cd zens-test

3. Start the Docker environment:

   ```bash
   docker-compose up