FROM centos
RUN yum install git wget net-tools epel-release -y && yum remove firewalld -y && yum update -y && exit
