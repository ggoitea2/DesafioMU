#%RAML 1.0
title: DESAFIO MAILUP
baseUri: http://localhost:8000/api
version: 1.0

/register:
  post:
      description: |
        Registrar usuario
      queryParameters:
        access_token:
      
      body:
        application/json:
      
          type: |
            {
              "name": {
                "type": "string",
                "required": "true"
              }
              "email": {
                "type": "string",
                "required": "true"
              }
              "password": {
                "type": "string",
                "required": "true"
              }

            }
        responses:
          201:
            body:
              application/json:
          422:
            body:
                application/json:
  
/login:
  post:
      description: |
        Login
      queryParameters:
        access_token:
      
      body:
        application/json:
      
          type: |
            {
              "email": {
                "type": "string",
                "required": "true"
              }
              "password": {
                "type": "string",
                "required": "true"
              }

            }
        responses:
          200:
            body:
              application/json:
              example: |
                {"token": "3|9emNoz12xZRlAGX2c5p4XqqmSTL1j1h13TpLvtpK"}
          422:
            body:
                application/json:

/product:
  displayName: Product
  get:
    description: Enumera todos los registros de productos
    queryParameters:
      access_token:
      name:
        required: false
        type: string
        description: Usar para buscar por nombre de producto
      responses:
        200:
          body: 
            application/json: 
  post:
    description: |
      Crear productoo
    queryParameters:
      access_token:
    
    body:
      application/json:
    
        type: |
          {
            "name": {
                "type": "string",
                "required": true,
              },
            "description": {
                "type": "string",
                "required": false
              },
              "image": {
                "type": "string",
                "required": false
              }
              "brand": {
                "type": "string"
                "required": false
              }
              "price": {
                "type": "numeric",
                "required": "true",
              }
              "price_sale": {
                "type": "numeric",
                "required": "false",
              }
              "category": {
                "type": "string",
                "required": "false",
              }
              "stock": {
                "type": "integer",
                "required": "true",
              }

          }
      responses:
        201:
          body:
            application/json:
        422:
          body:
              application/json:
  
  /{productId}:
    get:
      description: Consulta por un producto
      queryParameters:
        access_token:
      responses:
        200:
          body:
            application/json:
        404:
          body:
            application/json:
    put:
      description: |
        Crear productoo
      queryParameters:
        access_token:
    
      body:
        application/json:
    
          type: |
            {
              "name": {
                  "type": "string",
                  "required": true,
                },
              "description": {
                  "type": "string",
                  "required": false
                },
                "image": {
                  "type": "string",
                  "required": false
                }
                "brand": {
                  "type": "string"
                  "required": false
                }
                "price": {
                  "type": "numeric",
                  "required": "true",
                }
                "price_sale": {
                  "type": "numeric",
                  "required": "false",
                }
                "category": {
                  "type": "string",
                  "required": "false",
                }
                "stock": {
                  "type": "integer",
                  "required": "true",
                }

            }
      responses:
        200:
          body:
            application/json:
        404:
          body:
              application/json:
        422:
          body:
              application/json:
    delete:
      description: |
        Elimina un producto
      queryParameters:
        access_token:
    
      body:
        application/json:
          responses:
        200:
          body:
            application/json:
        404:
          body:
              application/json:
/photos:
  get:
    description: recupera photos
      queryParameters:
        page:
          required: false
          type: integer
          description: Set numero de pagina
        responses:
          200:
            body: 
              application/json: