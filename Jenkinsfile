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
                    // Print the current directory to ensure we are in the correct location
                    powershell 'Get-Location'
                    
                    // List the files in the current directory to ensure the Dockerfile exists
                    powershell 'Get-ChildItem'
                    
                    // Print the contents of the Dockerfile if it exists
                    powershell 'Get-Content Dockerfile'
                    
                    // Build Docker image
                    powershell 'docker build -t my-php-app .'
                    
                    // Run Docker container
                    powershell 'docker run -p 8443:80 my-php-app'
                }
            }
        }
        
                

        // Add more stages as needed
    }
}
