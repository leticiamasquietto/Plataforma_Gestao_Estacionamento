<h1>Painel do Estacionamento</h1>

<h2>
    Valor da hora:
    R$ {{ $config['valor_hora'] }}
</h2>

<h2>
    Faturamento:
    R$ {{ $total }}
</h2>

<hr>

<h2>Vagas</h2>

@foreach($vagas as $vaga)

    <p>
        Vaga
        {{ $vaga->data()['numero'] }}

        -

        @if($vaga->data()['esta_ocupada'])
            Ocupada
        @else
            Livre
        @endif
    </p>

@endforeach

<hr>

<h2>Reservas</h2>

<table border="1" cellpadding="10">

    <tr>
        <th>Telefone</th>
        <th>Placa</th>
        <th>Duração</th>
        <th>Valor</th>
        <th>Status</th>
        <th>Ação</th>
    </tr>

@foreach($reservas as $reserva)

<tr>

    <td>
        {{ $reserva->data()['telefone_usuario'] }}
    </td>

    <td>
        {{ $reserva->data()['placa'] }}
    </td>

    <td>
        {{ $reserva->data()['duracao'] }}
    </td>

    <td>
        R$ {{ $reserva->data()['valor'] }}
    </td>

    <td>

        @if($reserva->data()['esta_ativa'])
            Ativa
        @else
            Finalizada
        @endif

    </td>

    <td>

        @if($reserva->data()['esta_ativa'])

            <a href="/liberar/{{ $reserva->id() }}">
                Liberar vaga
            </a>

        @endif

    </td>

</tr>

@endforeach

</table>