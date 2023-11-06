# Pull base image
FROM ubuntu:14.04


# install.
RUN \
    sed -i 's/# \(.*multiverse$\)/\1/g' /etc/apt/source.list && \
    apt-get update && \
    apt-get -y upgrade && \
    apt-get install -y build-essential && \
    apt-get install -y software=properties-common && \
    apt-get install -y byobu curl git htop man unzip vim wget && \
    rm -rf /var/lib/apt/list/*

# Add files.
ADD root/.bashrc /root/.bashrc
ADD root/.gitconfig /root/gitconfig
ADD root/.scripts /root/.scripts

# Set Environment variables.

ENV home /root

# Define Working Directories
WORKDIR /root

# Define default commands.
RUN ["bash"]
