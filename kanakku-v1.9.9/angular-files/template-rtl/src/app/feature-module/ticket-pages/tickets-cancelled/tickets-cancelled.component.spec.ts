import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TicketsCancelledComponent } from './tickets-cancelled.component';

describe('TicketsCancelledComponent', () => {
  let component: TicketsCancelledComponent;
  let fixture: ComponentFixture<TicketsCancelledComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TicketsCancelledComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(TicketsCancelledComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
