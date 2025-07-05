Run this project from inside a WSL2 space (**NOT** in a mounted windows folder like /mnt/c/...) or on a Linux machine for decent performance.

## Running the first time
```bash
./bun install
./composer install
UID="$(id -u)" GID="$(id -g)" docker compose up -d --build
```

## Dev 
```bash
./bun run dev
```

## Install Backend dependencies:

```bash
./composer require <package-name>
```

## Install Frontend dependencies:
```bash
./bun add <package-name>
``` 