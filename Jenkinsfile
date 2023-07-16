stages {
    stage('build docker image') {
        steps {
            sh 'ssh -o StrictHostKeyChecking=no sovichea@172.19.24.33 "cd /apps/Dummy-Bank/api-v1;\
            git pull;\
            sudo docker build -t bank-api .;\
            "'
        }
    }
    stage('push image to private registry'){
            steps {
            sh 'ssh -o StrictHostKeyChecking=no sovichea@172.19.24.33 "cd /apps/Dummy-Bank/api-v1;\
            sudo docker login;\
            sudo docker tag bank-api bank-api:v${BUILD_NUMBER};\
            sudo docker push bank-api:v${BUILD_NUMBER};\
            "'
        }
    }
    stage('deploy to production'){
        steps {
            sh 'ssh -o StrictHostKeyChecking=no sovichea@172.19.24.33 "cd /apps/Dummy-Bank/api-v1;\
            sudo docker login;\
            sudo TAG=${BUILD_NUMBER} docker-compose up -d;\
            "'
        }
    }
    }