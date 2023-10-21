# Souce data:

data "aws_codeartifact_repository_endpoint" "test" {
  domain     = aws_codeartifact_domain.test.domain
  repository = aws_codeartifact_repository.test.repository
  format     = "npm"
}

///////////////////////////////////////////////////////////////////////////////////////
