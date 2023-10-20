# BASIC USAGE:

# resource "aws_cloudfront_distribution" "staging" {
#  enabled = true
#  staging = true

  # ... other configuration ...
#}

resource "aws_cloudfront_continuous_deployment_policy" "example" {
  enabled = true

  staging_distribution_dns_names {
    items    = [aws_cloudfront_distribution.staging.domain_name]
    quantity = 1
  }

  traffic_config {
    type = "SingleWeight"
    single_weight_config {
      weight = "0.01"
    }
  }
}

# resource "aws_cloudfront_distribution" "production" {
  # enabled = true

  # NOTE: A continuous deployment policy cannot be associated to distribution
  # on creation. Set this argument once the resource exists.
  #continuous_deployment_policy_id = aws_cloudfront_continuous_deployment_policy.example.id

  # ... OUTRAS CONFIGURAÇÕES:
# }
# Single Weight Config with Session Stickiness..

resource "aws_cloudfront_continuous_deployment_policy" "example" {
  enabled = true

  staging_distribution_dns_names {
    items    = [aws_cloudfront_distribution.staging.domain_name]
    quantity = 1
  }

  traffic_config {
    type = "SingleWeight"
    single_weight_config {
      weight = "0.01"
      session_stickiness_config {
        idle_ttl    = 300
        maximum_ttl = 600
      }
    }
  }
}

# SINGLE HEADER CONFIGURATION:
resource "aws_cloudfront_continuous_deployment_policy" "example" {
  enabled = true

  staging_distribution_dns_names {
    items    = [aws_cloudfront_distribution.staging.domain_name]
    quantity = 1
  }

  traffic_config {
    type = "SingleHeader"
    single_header_config {
      header = "aws-cf-cd-example"
      value  = "example"
    }
  }
}

#ARGUMENTS E REFERENCES:

# IMPORTS:
import {
  to = aws_cloudfront_continuous_deployment_policy.example
  id = "abcd-1234"
}

