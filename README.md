# TalentFusion

**TalentFusion**, a job board platform designed to connect employers with job seekers seamlessly. With an intuitive interface, users can easily post jobs, search for opportunities, and manage their profiles.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [API Endpoints](#api-endpoints)
- [Installation](#installation)

## Features

- **Job Listings**: View and search through a variety of job postings.
- **User Authentication**: Secure registration and login for employers and job seekers.
- **Job Posting**: Employers can create and manage job postings easily.
- **Profile Management**: Users can update their profiles with personal and professional information.
- **Company Profiles**: Employers can create and manage their company profiles.
- **Role-based Access**: Different features for Job Seekers and Employers.

## Technologies Used

- **Backend**: Laravel
- **Database**: PostgreSQL
- **Frontend**: Blade templates, HTML, CSS
- **Middleware**: Custom middleware for user type verification
- **Authentication**: Built-in Laravel authentication

## API Endpoints

### Job Routes

- **GET /jobs**  
  **Description**: Retrieve a list of all jobs.  

- **GET /jobs/create**  
  **Description**: Show the form to create a new job.  

- **POST /jobs**  
  **Description**: Store a new job.  

- **GET /jobs/{job}**  
  **Description**: Show a specific job's details.  

### User Authentication Routes

- **GET /register**  
  **Description**: Show registration form.  

- **POST /register**  
  **Description**: Handle user registration.  

- **GET /login**  
  **Description**: Show login form.  

- **POST /login**  
  **Description**: Handle user login.  
  **Access**: Public  

- **POST /logout**  
  **Description**: Log the user out.  

### Profile Routes

- **GET /profile**  
  **Description**: Show the user's profile.  

- **POST /profile**  
  **Description**: Update the user's profile.  

### Company Routes

- **GET /company/create**  
  **Description**: Show the form to create a new company.  

- **POST /company**  
  **Description**: Store a new company profile.  

- **GET /company/{company}**  
  **Description**: Show details of a specific company.  

- **GET /company/edit/{company}**  
  **Description**: Show the form to edit an existing company profile.  

- **PUT /company/{company}**  
  **Description**: Update an existing company profile.  


## Installation

To get started with TalentFusion, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/talentfusion.git
   cd talentfusion

