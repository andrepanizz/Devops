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