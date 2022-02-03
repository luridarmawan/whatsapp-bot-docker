FROM luri/whatsapp-wrapper

WORKDIR /app
#RUN wget https://github.com/luridarmawan/whatsapp-bot-docker/raw/development/bin/carik-linux.zip && unzip -o carik-linux.zip && chmod +x carik-linux && rm -rf carik-linux.zip

# Copy your config file to container
COPY config.json .

#CMD ["./carik-linux"]
