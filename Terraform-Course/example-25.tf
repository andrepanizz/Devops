# Data Source:
# aws_codestarconnections_connection:

# Por ARN:

data "aws_codestarconnections_connection" "example" {
  arn = aws_codestarconnections_connection.example.arn
}

# Por Nome:
data "aws_codestarconnections_connection" "example" {
  name = aws_codestarconnections_connection.example.name
}

#ARGUMENTS AND REFERENCES:


