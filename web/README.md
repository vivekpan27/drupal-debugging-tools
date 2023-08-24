VSCode
Create workspace
Create .vscode/launch.json

Add following code
```
{
  "version": "0.2.0",
  "configurations": [
    {
      "name": "Listen for XDebug",
      "type": "php",
      "request": "launch",
      "port": 9003,
      "pathMappings": {
        "/app/": "${workspaceFolder}/",
      }
    }
  ]
}
```

Install Xdebug helper chrome plugin

