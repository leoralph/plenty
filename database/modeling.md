### users

    - name (string)
    - email (string)
    - password (string)

### accounts

    - user_id (string fk:users)
    - name (string)
    - type (string)
    - currency (string)
    - initial_balance (signed_big_int)
    - initial_balance_date (date)

### categories

    - user_id (string fk:users)
    - name (string)
    - color (string)

### transactions

    - account_id (string fk:accounts)
    - category_id (string fk:categories nullable)
    - value (signed_big_int) *
