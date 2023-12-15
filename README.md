# API Final Project Readme
https://github.com/cadenps19/PHPFinalProject
## Overview
This project involves the creation of an API, complete with API key authentication and additional parameters. 
The API will be designed to manage data stored in a database and will be consumed by a web interface.
The assignment is divided into three tasks: creating the API, developing a web interface to edit API entries, 
and creating a simple webpage that consumes the API and updates the Document Object Model (DOM).

## Task 1: Create an API
### Objective
Develop an API accessible via a GET request, requiring a user API key.

### Key Features
#### Database Tables
- **Users Table:** Design a table to store user emails and API keys.
- **API Table:** Design a table to store API data.

#### API Key Generation
- Create a registration page where users can enter an email to get a unique API assigned to that email.
- Implement PHP code to generate and assign unique API keys, storing the API key and email in the Users table.

## Task 2: Create a Web Interface to Edit API Entries
### Objective
Implement a web page to interact with the API data.

### Key Features
- **Data Display:** Show all data entries from the API's database table.
- **Data Manipulation:** Allow users to add, edit, and optionally delete API data entries.

## Task 3: Create a Simple Webpage Consuming the API
### Objective
Develop a simple webpage that consumes the API and updates the Document Object Model (DOM).
This is handled by the site2index.html page

## Getting Started

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-repo.git
   cd your-repo
   ```

2. **Setup Database:**
   - using the attached sql file in the canvas submission

3. **Run the API:**
   - Start a local server or deploy the API to an apache server.

4. **Access the Web Interface:**
   - Open `web-interface/index.html` in a web browser.

5. **Consuming the API:**
   - Modify the API endpoint in the webpage script to match your deployed API.

## Technologies Used
- PHP for API development
- Apache and MYsql for server hosting and sql table creation
- HTML and JavaScript for the web interface
