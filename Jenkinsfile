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
        dir('C:/Users/Ambika M/OneDrive/Desktop/New folder/restaurant') {
            powershell 'docker build -t my-php-app .'
            powershell 'docker run -p 8443:80 my-php-app'
        }
    }
}
        
                

        // Add more stages as needed
    }
}
