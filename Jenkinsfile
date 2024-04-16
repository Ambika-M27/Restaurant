pipeline {
    agent any

    stages {
        stage('checkout') {
            steps {
                checkout scm
            }
        }
        
 stage('Install Dependencies & web server, database') {
            steps {
                // Execute the batch script
                bat 'cd "C:/Users/Ambika M/OneDrive/Desktop/New folder/restaurant" && docker build -t my-php-app .'
                
                // Run Docker container
                bat 'docker run -p 8443:80 my-php-app'
            }
        }
        
                

        // Add more stages as needed
    }
}
