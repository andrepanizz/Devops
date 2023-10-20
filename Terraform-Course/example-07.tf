#AWS_Cloud_Front_cache_Policy Exemplo de utilização;
resource "aws_cloudfront_cache_policy" "example" {
  name        = "examplo-de-Politica (Policy)"
  comment     = "teste de Comentario "
  default_ttl = 51
  max_ttl     = 101
  min_ttl     = 2
  parameters_in_cache_key_and_forwarded_to_origin {
    cookies_config {
      cookie_behavior = "whitelist"
      cookies {
        items = ["exemplos"]
      }
    }
    headers_config {
      header_behavior = "whitelist"
      headers {
        items = ["exemplos"]
      }
    }
    query_strings_config {
      query_string_behavior = "whitelist"
      query_strings {
        items = ["exemplos"]
      }
    }
  }
}

#ARGUMENTS E REFERENCES:
