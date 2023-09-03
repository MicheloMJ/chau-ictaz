-- Database Name = "chau_ictaz"

-- Table to store information about executive committee members
CREATE TABLE IF NOT EXISTS ExecutiveMembers (
    MemberID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Position ENUM(
        'President',
        'Vice President',
        'Secretary General',
        'Vice Secretary',
        'Publicity Secretary',
        'Treasurer',
        'Projects Coordinator',
        'Women in ICT Coordinator',
        'Distance Students Coordinator'
    ) NOT NULL,
    Bio TEXT,
    ImageURL VARCHAR(255),
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table to store information about team leaders
CREATE TABLE IF NOT EXISTS TeamLeaders (
    LeaderID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Position ENUM('Cyber Team Leader', 'Developers Team Leader', 'Media Team Leader') NOT NULL,
    Bio TEXT,
    ImageURL VARCHAR(255),
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table to store information about projects
CREATE TABLE IF NOT EXISTS Projects (
    ProjectID INT PRIMARY KEY AUTO_INCREMENT,
    Title VARCHAR(255) NOT NULL,
    Description TEXT,
    ImageURL VARCHAR(255),
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table to store information about events
CREATE TABLE IF NOT EXISTS Events (
    EventID INT PRIMARY KEY AUTO_INCREMENT,
    Title VARCHAR(255) NOT NULL,
    Description TEXT,
    Date DATE,
    ImageURL VARCHAR(255),
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table to store news articles
CREATE TABLE IF NOT EXISTS News (
    NewsID INT PRIMARY KEY AUTO_INCREMENT,
    Title VARCHAR(255) NOT NULL,
    Content TEXT,
    Date DATE,
    ImageURL VARCHAR(255),
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table to store downloads
CREATE TABLE IF NOT EXISTS Downloads (
    DownloadID INT PRIMARY KEY AUTO_INCREMENT,
    Title VARCHAR(255) NOT NULL,
    Description TEXT,
    FileURL VARCHAR(255),
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
