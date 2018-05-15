package ar.edu.unlam.pb2;

import org.junit.Assert;
import org.junit.Test;

public class DiscoTest {

	@Test
	void testQueVerificaPerimetroInterior() {

		Disco miDisco = new Disco(5.0, null);

		Double valorEsperado = 31.415;
		Double valorobtenido = miDisco.perimetroInterior();

		Assert.assertEquals(valorEsperado, valorobtenido, 0.001);
	}

	@Test
	void testQueVerificaPerimetroExterior() {

		Disco miDisco = new Disco(null, 10.0);

		Double valorEsperado = 62.83;
		Double valorObtenido = miDisco.perimetroExterior();

		Assert.assertEquals(valorEsperado, valorObtenido, 0.01);
	}

	@Test
	void testQueVerificaSuperficieDelDisco() {

		Disco miDisco = new Disco(5.0, 10.0);

		Double valorEsperado = 235.612;
		Double valorObtenido = miDisco.superficieDisco();

		Assert.assertEquals(valorEsperado, valorObtenido, 0.01);

	}

	@Test
	void testVerRadioInterior() {

		Disco miDisco = new Disco(5.0, null);

		Double valorEsperado = 5.0;
		Assert.assertEquals(valorEsperado, miDisco.verRadioInterior());
	}

	@Test
	void testQueSeteaRadioInterior() {
		Disco miDisco = new Disco(5.0, null);

		miDisco.cambiarRadioInterior(10.0);
		Double valorEsperado = 10.0;

		Assert.assertEquals(valorEsperado, miDisco.verRadioInterior());
	}

	@Test
	void testVerRadioExterior() {

		Disco miDisco = new Disco(null, 20.0);

		Double valorEsperado = 20.0;
		Double valorObtenido = miDisco.verRadioExterior();

		Assert.assertEquals(valorEsperado, valorObtenido);
	}

	@Test
	void testQueCambiaRadioExterior() {

		Disco miDisco = new Disco(null, 15.0);
		miDisco.cambiarRadioExterior(25.0);

		Double valorEsperado = 25.0;

		Assert.assertEquals(valorEsperado, miDisco.verRadioExterior());
	}
}
