# Aula 18/03

## MainActivity.java

```java
public class MainActivity extends AppCompatActivity {
    EditText n1;
    EditText n2;
    EditText n3;
    TextView r;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        n1 = findViewById(R.id.n1);
        n2 = findViewById(R.id.n2);
        n3 = findViewById(R.id.n3);
        r = findViewById(R.id.r);

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }

    public void maior(View view){
        float maior = Float.parseFloat(n1.getText().toString());
        float num2 = Float.parseFloat(n2.getText().toString());

        if(num2 > maior){
            maior = num2;
        }

        float num3 = Float.parseFloat(n3.getText().toString());

        if(num3 > maior){
            maior = num3;
        }

        r.setText(String.format(new Locale("pt", "BR"), "Maior: %.1f", maior));
    }
}
````

## Imagens

![Código + App](img/aula03/codico%20+%20app.png)
![Layout + App](img/aula03/layout%20+%20app.png)
![Strings + App](img/aula03/strings%20+%20app.png)

## APK

[Baixar APK](dist/Maior%20Numero.apk)

