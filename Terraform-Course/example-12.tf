# Resource: aws_cloudfront_key_group

resource "aws_cloudfront_public_key" "example" {
  comment     = "example public key"
  encoded_key = file("public_key.pem")
  name        = "example-key"
}

resource "aws_cloudfront_key_group" "example" {
  comment = "example key group"
  items   = [aws_cloudfront_public_key.example.id]
  name    = "example-key-group"
}