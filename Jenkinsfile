pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }
        
        stage('Install Dependencies & Run Web Server and Database') {
            steps {
                script {
                   
                    
                    // Run the Docker container
                    sh 'docker run -p 8443:80 my-php-app'
                }
            }
        }

        // Add more stages as needed
    }
    
   post {
        always {
            // Cleanup Docker container after execution
            script {
                sh 'docker stop my-php-container'
                sh 'docker rm my-php-container'
            }
        }
    }
}
