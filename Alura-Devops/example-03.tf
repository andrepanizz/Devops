# Credentials can be provided by adding an access_key, secret_key, and optionally token, to the aws provider block.
# usage:
provider "aws" {
  region     = "us-west-2"
  access_key = "my-access-key"
  secret_key = "my-secret-key"
}
