terraform {
  required_providers {
    aws = {
        source = "hashicorp/aws"
        version = "~> 4.16"
    }
  }
  required_version = ">= 1.2.0"
}
# Qual vai ser o provedor, que estamos utilizando para criar nossa infra-estrutura
# O provedor tem algumas configurações:

provider "aws" {
    region = "us-west-2"
}
# agora abaixo passaremos informações sobre o recurso que iremos utilizar:
resoutce "aws_instance" "app_server" {
    ami         = "ami-08a52ddb321b32a8c"
    instance_type = "t2-micro"
    key_name = "iac-alura"
}
## continuando a aplicação;
## date: 23/08/2023

