FROM openjdk:8

ARG MAVEN_VERSION=3.5.0
ARG M2_HOME=/opt/maven/apache-maven-${MAVEN_VERSION}/

WORKDIR /code

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    && mkdir -p /opt/maven \
    && wget -c http://mirror.nbtelecom.com.br/apache/maven/maven-3/3.5.0/binaries/apache-maven-${MAVEN_VERSION}-bin.tar.gz -O /opt/maven/maven.tar.gz \
    && cd /opt/maven/ \
    && tar -xzvf /opt/maven/maven.tar.gz \
    && rm maven.tar.gz

ENV PATH="${M2_HOME}/bin:$PATH"
