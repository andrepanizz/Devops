# aws_codeartifact_authorization_token

#Data Source:


data "aws_codeartifact_authorization_token" "test" {
  domain = aws_codeartifact_domain.test.domain
}

#ARGUMENTS AND REFERENCES:
/*
This data source supports the following arguments:

domain - (Required) Name of the domain that is in scope for the generated authorization token.
domain_owner - (Optional) Account number of the AWS account that owns the domain.


/////////////////////////////////////////////////////////
*/