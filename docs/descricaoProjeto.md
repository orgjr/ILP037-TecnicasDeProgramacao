### O projeto
Aplicação web desenvolvida para fornecer uma plataforma de cadastro e exibição de anúncios para vagas de empregos e cursos.
O cliente empresarial pode cadastrar, editar e excluir anúncios.
O cliente Pessoa Física pode visualizar estes anúncios.

Responsáveis pelo Projeto:
Osmar Garcia
Vagner Ventura
Renato Carvalho

### Primeira Implementação

#### Diagrama C4model nível 1
![[c4ContextDiagramN1.pdf]]

#### Diagrama C4model nível 2
![[c4ContextDiagramN2.pdf]]

#### Diagrama de Classes
![[ClassDiagramBeforeOK.pdf]]

A classe *Cliente* tem uma relação de composição com a classe *Anúncios* para implementar os métodos **cadastrar, editar, excluir** e **visualizar**.
A classe *Cliente* é **Abstrata** e é **herdada** por *Empresa* e *Pessoa Física*. Neste momento, ambas conseguem implementar os atributos e métodos da superclasse.
*Empresa* e *Pessoa Física* acessam os anúncios. 

### Design Patterns implementados.
- Neste pedaço de software, escolhemos os padrões ***Bridge*** e ***Singleton***.


### Segunda implementação com Design Patterns
#### Singleton
![[Singleton.pdf]]
Singleton foi o padrão escolhido para a geração de logs do sistema. Pela sua característica, de ter apenas uma única instância e um ponto global de acesso, é ideal para essa aplicação.

#### Bridge
![[classDiagramBridgeOnly.pdf]]
Bridge foi escolhido, por que com ele é possível que duas classes que compartilham a mesma abstração, possam variar independentemente. Neste caso, temos dois perfis que consumirão a classe Anúncio, clientes pessoa física e empresas. Também desacopla o código, o que favorecer que mais classes façam uso destas superclasses. O padrão também foi aplicado na classe *Cliente*, deixando mais possibilidades para evolução do sistema.

### Diagrama de Classes após a implementação dos padrões
![[completeClassDiagram.pdf]]

### Trechos de códigos relevantes: 
##### Primeira Implementação: 
![[Pasted image 20231126200007.png]]
![[Pasted image 20231126200057.png]]

##### Segunda Implementação:
![[Pasted image 20231126200209.png]]
![[Pasted image 20231126200232.png]]
![[Pasted image 20231126200252.png]]
![[Pasted image 20231126200307.png]]
![[Pasted image 20231126200336.png]]
![[Pasted image 20231126200358.png]]
![[Pasted image 20231126200415.png]]
![[Pasted image 20231126200441.png]]
