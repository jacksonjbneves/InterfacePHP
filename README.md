# Interface em PHP

Elas são ótimas para gerar um contrato(métodos em comum) de várias classes em uma interface, trazendo um conjunto de classes que são familiares. Permitindo múltipla-herança para uma classe(import/include), padrão e tipagem em todos os métodos(contratos). Veja porque elas são importantes:

**Padronização de Comportamento:** Interfaces definem um conjunto de métodos que uma classe deve implementar. Isso proporciona consistência no comportamento das classes que implementam a interface. Por exemplo, se você tem uma interface Veiculo com um método acelerar(), você pode ter várias classes como Carro, Moto e Caminhão que implementam essa interface, garantindo que todas elas tenham um método para acelerar.

**Flexibilidade e Extensibilidade:** Interfaces permitem que diferentes classes compartilhem um contrato comum, tornando mais fácil substituir uma implementação por outra sem alterar o código que as utiliza. Por exemplo, se você tem um método que espera um parâmetro de uma interface Impressora, você pode passar qualquer objeto que implemente essa interface, sem se preocupar com a classe específica.


**Polimorfismo:** Interfaces suportam polimorfismo, o que significa que você pode tratar objetos de diferentes classes que implementam a mesma interface de forma uniforme. Isso permite escrever código genérico que pode trabalhar com diferentes tipos de objetos sem depender de suas classes específicas.


**Desacoplamento:** Usar interfaces reduz o acoplamento entre classes, pois permite escrever código que depende apenas das interfaces, em vez de classes concretas. Isso facilita a manutenção e o teste do código, pois as classes podem ser substituídas ou alteradas sem afetar outras partes do sistema.

