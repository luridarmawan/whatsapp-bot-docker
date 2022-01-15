FROM luri/whatsapp-wrapper

WORKDIR /app
# Copy your config file to container
COPY config.json .

#CMD ["./carik-linux"]
