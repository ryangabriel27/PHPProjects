## •	Escopo:
#### -	Criar um sistema funcional para que médicos gerenciem sua agenda de consultas e que pacientes possam realizar consultas.
## •	Objetivos:
###	Específicos: 
##### 	O sistema deve permitir que os usuários optem por ter um perfil de médico ou de paciente. O médico pode criar a sua agenda de horários para a consulta, também, é possível remarcar e/ou cancelar uma consulta. Os pacientes podem buscar consultas que encaixem no seu dia-a-dia e agenda-las.
### o	Mensuráveis:
##### 	O sistema deve suportar mais de 100 cadastros;
##### 	O sistema deve suportar múltiplos acessos ao mesmo tempo;
##### 	O sistema deve suportar que um paciente tenha várias consultas agendadas
### o	Atingíveis:
##### 	Desenvolver um sistema funcional, seguro e confiável
##### 	Desenvolver uma interface agradável, acessível e de fácil entendimento a todo tipo de usuário
##### 	Implementar métodos CRUD para as consultas
##### 	Desenvolver base de dados que comuniquem com a página web, garantindo a segurança e integridade de dados dos usuários.
##### 	Utilizar linguagens de programação front-end como Html, Css e JavaScript
##### 	Utilizar linguagens de programação back-end como PHP (Laravel)
### o	Relevantes:
##### 	Interface atrativa para auxiliar a compreensão dos usuários durante o uso da plataforma
##### 	Filtros para que os usuários encontrem consultas mais específicas
### o	Temporais:
##### 	Desenvolver um protótipo funcional que comunique com a base de dados em 12 horas de projeto.
## •	Cronograma:
    ---

## •	Recursos:
#### o	Softwares de versionamento: Git e GitHub
#### o	Softwares para desenvolvimento: Visual Studio Code
#### o	Softwares para Gerenciamento do Banco De Dados: PostgreSQL
#### o	Equipe de desenvolvimento:
##### 	Programadores back-end Laravel
##### 	Programadores front-end
##### 	Gerente de projeto
##### 	Equipe de comunicação
#### o	Ferramentas para planejamento:
##### 	Github Projects
##### 	Figma

•	Análise de Risco:
o	Atraso no desenvolvimento por razões externas ao trabalho
	Solução: Se concentrar na produção do projeto, se atentando sempre a data de entrega
o	Problemas de conexão com banco de dados
	Solução: Realização de backups e manutenções frequentes na plataforma garantindo que o usuário não utilize uma plataforma com erros.
o	Falha na segurança ou criptografia dos dados
	Solução: Revisões constantes aos usuários cadastrados e manutenção no código da plataforma
o	Conflitos de horários no sistema de agendamento.
	Solução: Uso de boas práticas de programação para evitar que esses erro possam ocorrer
•	Diagrama de Desenvolvimento:

o	Diagrama de Classe:
	Usuarios(
- nome
- senha
- email
- tipo [“medico”, “paciente”]
- cpf
- cidade
- estado
- cep
- crm 
)
	Consultas(
- horário
- data
- especialidade
- medico (usuário_id)
- localidade
)
	Agenda(
- paciente (usuário_id)
- consulta_id
- status
)

o	Diagrama de Uso:
	Paciente:
	Pode buscar, marcar e verificar suas consultas marcadas
	Médico:
	Pode criar, editar ,apagar e verificar horários de suas consultas

o	Diagrama de Fluxo:
	Cadastro/Login → [Paciente] → Dashboard - Paciente
	Pesquisar novas consultas para marca-las
	Ver suas consultas já marcadas

•	Cadastro/Login → [Médico] → Dashboard - Médico
	Verificar a agenda de horários
	Editar horários de consultas marcadas ou desmarcadas
	Excluir consultas marcadas ou desmarcadas
	Criar novos horários de consulta


