# docker build . -t mywhatsapp
# docker run --rm -it mywhatsapp

FROM luri/whatsapp-wrapper

WORKDIR /app
COPY config.json .

ENTRYPOINT ./carik-linux
