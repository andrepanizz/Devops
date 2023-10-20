# aws Cloud Watch compositor de Alarme:
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
