```mermaid
erDiagram
    sales {
       bigint id PK "ID"
       text bill_number "請求番号"
       bigint price "価格"
       datetime created_at "作成日"
       datetime updated_at "更新日"
   }
```