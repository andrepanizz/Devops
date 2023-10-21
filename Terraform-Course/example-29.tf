# aws_codeartifact_domain_permissions_policy

# Example the Usage:


resource "aws_kms_key" "example" {
  description = "domain key"
}

resource "aws_codeartifact_domain" "example" {
  domain         = "example"
  encryption_key = aws_kms_key.example.arn
}

data "aws_iam_policy_document" "test" {
  statement {
    effect = "Allow"

    principals {
      type        = "*"
      identifiers = ["*"]
    }

    actions   = ["codeartifact:CreateRepository"]
    resources = [aws_codeartifact_domain.example.arn]
  }
}
resource "aws_codeartifact_domain_permissions_policy" "test" {
  domain          = aws_codeartifact_domain.example.domain
  policy_document = data.aws_iam_policy_document.test.json
}