terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 5.0"
    }
  }
}

# Configure the AWS Provider:
provider "aws" {
  region = "us-east-1"
}

# Create a VPC:
resource "aws_vpc" "example" {
  cidr_block = "10.0.0.0/16"
}
# Argument and references:

# Credentials can be provided by adding an access_key, secret_key, and optionally token, to the aws provider block.
# Example the usage:
provider "aws" {
  region     = "us-west-2"
  access_key = "my-access-key"
  secret_key = "my-secret-key"
}
///////////////////////////////////////////////////////////

#exemplo de utilização criando um novo load balancer indexado:
# Create a new load balancer attachment
resource "aws_autoscaling_attachment" "example" {
  autoscaling_group_name = aws_autoscaling_group.example.id
  elb                    = aws_elb.example.id
}
# Create a new ALB Target Group attachment
#exemplo criando um novo Application Load Balancer Grupo para indexado:

resource "aws_autoscaling_attachment" "example" {
  autoscaling_group_name = aws_autoscaling_group.example.id
  lb_target_group_arn    = aws_lb_target_group.example.arn
}
# Configure the AWS Provider
# provider "aws" {
#  version = "~> 5.0"
#  region  = "us-east-1"
# }

# Create a VPC
#resource "aws_vpc" "example" {
# cidr_block = "10.0.0.0/16"
# }



# ações do alarme, Regras de Alarme utilizando |Cloud Watch

resource "aws_cloudwatch_composite_alarm" "example" {
  alarm_description = "This is a composite alarm!"
  alarm_name        = "example-composite-alarm"

  alarm_actions = aws_sns_topic.example.arn
  ok_actions    = aws_sns_topic.example.arn

  alarm_rule = <<EOF
ALARM(${aws_cloudwatch_metric_alarm.alpha.alarm_name}) OR
ALARM(${aws_cloudwatch_metric_alarm.bravo.alarm_name})
EOF

  actions_suppressor {
    alarm            = "suppressor-alarm"
    extension_period = 10
    wait_period      = 20
  }
}

#ARGUMENTOS E REFERENCENCIAS:


# ações do alarme, Regras de Alarme utilizando |Cloud Watch

resource "aws_cloudwatch_composite_alarm" "example" {
  alarm_description = "This is a composite alarm!"
  alarm_name        = "example-composite-alarm"

  alarm_actions = aws_sns_topic.example.arn
  ok_actions    = aws_sns_topic.example.arn

  alarm_rule = <<EOF
ALARM(${aws_cloudwatch_metric_alarm.alpha.alarm_name}) OR
ALARM(${aws_cloudwatch_metric_alarm.bravo.alarm_name})
EOF

  actions_suppressor {
    alarm            = "suppressor-alarm"
    extension_period = 10
    wait_period      = 20
  }
}

#ARGUMENTOS E REFERENCENCIAS:



# AWS CloudWatch - Dashboard Principal:

resource "aws_cloudwatch_dashboard" "main" {
  dashboard_name = "my-dashboard"

  dashboard_body = jsonencode({
    widgets = [
      {
        type   = "metric"
        x      = 0
        y      = 0
        width  = 12
        height = 6

        properties = {
          metrics = [
            [
              "AWS/EC2",
              "CPUUtilization",
              "InstanceId",
              "i-012345"
            ]
          ]
          period = 300
          stat   = "Average"
          region = "us-east-1"
          title  = "EC2 Instance CPU"
        }
      },
      {
        type   = "texto de exemplo"
        x      = 0
        y      = 7
        width  = 3
        height = 3

        properties = {
          markdown = "Ola Mundo!"
        }
      }
    ]
  })
}

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

