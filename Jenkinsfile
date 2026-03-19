pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/Laires25/project-test.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                bat 'pip install selenium'
            }
        }

        stage('Run Tests') {
            steps {
                bat 'python tests/selenium/test_login.py'
                bat 'python tests/selenium/test_login_valido.py'
            }
        }
    }
}