# Resource: aws_codestarconnections_connection

resource "aws_codestarconnections_connection" "example" {
  name          = "example-connection"
  provider_type = "Bitbucket"
}

